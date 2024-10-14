// Function to animate the counters
function animateCounter(element, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        element.textContent = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
}
    };
    window.requestAnimationFrame(step);
}

// Play animation for each statistic
document.addEventListener("DOMContentLoaded", function() {
    const serverCount = document.getElementById("serverCount");
    const commandCount = document.getElementById("commandCount");

    animateCounter(serverCount, 0, parseInt(serverCount.getAttribute('data-count')), 2000);
    animateCounter(commandCount, 0, parseInt(commandCount.getAttribute('data-count')), 2000);
});