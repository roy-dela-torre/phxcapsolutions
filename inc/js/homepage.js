jQuery(function () {
    const $bannerSection = jQuery("section.hp_hero");
    const $video = $bannerSection.find(".video-bg");
    const $source = $video.find("source");
    const videoUrl = window.location.origin + "/wp-content/themes/phxcapsolutions/assets/video/Banner-video.mp4";

    let idleTimer;

    // Initially remove the video src to prevent video from loading
    $source.attr("src", "");

    const playVideoSafely = (videoElement) => {
        if (!videoElement) {
            return;
        }

        const playPromise = videoElement.play();

        if (playPromise && typeof playPromise.catch === "function") {
            playPromise.catch((error) => {
                if (!error) {
                    return;
                }

                const message = (error.message || "").toLowerCase();
                const isExpectedInterruption =
                    error.name === "AbortError" ||
                    error.name === "NotAllowedError" ||
                    message.includes("paused to save power") ||
                    message.includes("interrupted");

                if (!isExpectedInterruption) {
                    console.error("Error playing the video:", error);
                }
            });
        }
    };

    // Set video src and play it after 5 seconds idle
    const setVideoSource = () => {
        if ($source.attr("src") === "") {
            $source.attr("src", videoUrl);
            const videoElement = $video[0];

            if (videoElement) {
                videoElement.load();
                playVideoSafely(videoElement);
            }
        }
    };

    // Reset idle timer
    const resetIdleTimer = () =>
        clearTimeout(idleTimer) || (idleTimer = setTimeout(setVideoSource, 5000));

    // User interaction resets idle timer
    $bannerSection.on("mouseenter click focus", resetIdleTimer);

    // Intersection Observer: Play video when section is visible
    new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                const videoElement = $video[0];

                if (entry.isIntersecting && videoElement && videoElement.paused) {
                    playVideoSafely(videoElement);
                } else if (!entry.isIntersecting && videoElement) {
                    videoElement.pause();
                }
            });
        }, {
        threshold: 0.5
    }
    ).observe($bannerSection[0]);

    // Start idle timer on page load
    resetIdleTimer();
});