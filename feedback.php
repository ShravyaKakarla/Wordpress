function feedback_form_shortcode() {
    ob_start(); ?>

    <form id="feedback-form">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required>

        <label for="comment">Comment:</label>
        <textarea name="comment" required></textarea>

        <button type="button" id="submit-feedback">Submit</button>
    </form>

    <div id="feedback-table"></div>

    <script>
        jQuery(document).ready(function ($) {
            $("#submit-feedback").on("click", function () {
                // Implement AJAX submission logic here
            });
        });
    </script>

    <?php
    return ob_get_clean();
}

add_shortcode('houzeo_feedback_form', 'feedback_form_shortcode');
