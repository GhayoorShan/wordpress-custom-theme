<?php
get_header();
?>

<div class="container">
    <section class="hero">
        <div class="text">
            <p class="join-us">Join Us</p>
            <h1>25K+ STUDENTS TRUST US</h1>
            <p>Every day brings with it a fresh set of learning possibilities.</p>
            <div class="cta">
            <a href="#" class="quote" data-toggle="modal" data-target="#quoteModal">Get Quote Now</a>
            <a href="#stats-section" id="learn-more" class="learn">Learn More</a>
            </div>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="Hero-image">
            <!-- <div class="box">g</div> -->
        </div>
    </section>

    <section class="features">
        <div class="feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature1.jpg" alt="Feature 1">
            <h3>Expert Instruction</h3>
            <p>The gradual accumulation of information about atomic and small-scale behaviour.</p>
        </div>
        <div class="feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature2.jpg" alt="Feature 2">
            <h3>Training Courses</h3>
            <p>The gradual accumulation of information about atomic and small-scale behaviour.</p>
        </div>
        <div class="feature">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature3.jpg" alt="Feature 3">
            <h3>Expert Instruction</h3>
            <p>The gradual accumulation of information about atomic and small-scale behaviour.</p>
        </div>
    </section>

    <section class="stats" id="stats-section">
        <div class="stat">
        <h3 id="happy-customers-count">15K</h3>
            <p>Happy Customers</p>
        </div>
        <div class="stat">
            <h3>150K</h3>
            <p>Monthly Visitors</p>
        </div>
        <div class="stat">
            <h3>15</h3>
            <p>Countries Worldwide</p>
        </div>
        <div class="stat">
            <h3>100+</h3>
            <p>Top Partners</p>
        </div>
    </section>

    <section class="client">
        <div class="text">
            <h2>Every Client Matters</h2>
            <p>Problems trying to resolve the conflict between the major realms of Classical physics: Newtonian mechanics</p>
            <a href="#" class="cta">Learn More</a>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg" alt="Client">
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="quoteModalLabel">Get a Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add your quote form here -->
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
