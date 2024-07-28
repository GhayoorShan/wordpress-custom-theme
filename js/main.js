jQuery(document).ready(function ($) {
  // Smooth scrolling
  $("#learn-more").click(function (e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $("#stats-section").offset().top,
      },
      1000,
      function () {
        // Animation for counter update
        var $happyCustomersCount = $("#happy-customers-count");
        var currentCount = 15;
        var targetCount = 20;
        var increment = 1;
        var intervalTime = 150;

        var interval = setInterval(function () {
          if (currentCount >= targetCount) {
            clearInterval(interval);
            $happyCustomersCount.text(targetCount.toLocaleString() + "K");
          } else {
            currentCount += increment;
            $happyCustomersCount.text(currentCount.toLocaleString() + "K");
          }
        }, intervalTime);
      }
    );
  });

  // Bootstrap modal initialization
  $("#quoteModal").modal({
    show: false,
  });
});
