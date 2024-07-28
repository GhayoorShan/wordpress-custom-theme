<footer>
<div class="container text-center">
<p>&copy; <?php echo date('Y'); ?> All rights reserved.</p>
        </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#learn-more').click(function(e) {
            e.preventDefault();
            let counter = $('#happy-customers');
            let count = 15000;
            let interval = setInterval(function() {
                count += 100;
                counter.text((count / 1000).toFixed(0) + 'K');
                if (count >= 20000) {
                    clearInterval(interval);
                }
            }, 50);
        });
    });
</script>
<?php get_footer(); ?>
</body>
</html>
