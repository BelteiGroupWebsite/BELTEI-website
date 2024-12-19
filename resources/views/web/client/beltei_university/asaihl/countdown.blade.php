<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Get the target date from Laravel's Blade variable
            const futureDate = new Date("{{ $futureDate->toIso8601String() }}").getTime();

            // Update the countdown every second
            const countdownInterval = setInterval(() => {
                const now = new Date().getTime();
                const distance = futureDate - now;

                // If the countdown is over
                if (distance < 0) {
                    clearInterval(countdownInterval);
                    document.getElementById("countdown").innerHTML = "EXPIRED";
                    return;
                }

                // Calculate days, hours, minutes, seconds
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result
                document.getElementById("countdown").innerHTML =
                    `<span>${days}d</span> <span>${hours}h</span> <span>${minutes}m</span> <span>${seconds}s</span>`;
            }, 1000);
        });
    </script>
</head>
<body>
    <h1>Countdown to 30th December 2024</h1>
    <div id="countdown">Loading...</div>
</body>
</html>
