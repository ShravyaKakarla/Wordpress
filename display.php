function feedback_list_shortcode() 
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'feedback';

    $feedback_data = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC", ARRAY_A);

    ob_start(); ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Comment</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($feedback_data as $feedback) : ?>
                <tr>
                    <td><?php echo esc_html($feedback['name']); ?></td>
                    <td><?php echo esc_html($feedback['email']); ?></td>
                    <td><?php echo esc_html($feedback['phone']); ?></td>
                    <td><?php echo esc_html($feedback['comment']); ?></td>
                    <td><?php echo esc_html($feedback['created_at']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php
    return ob_get_clean(); 
}

add_shortcode('houzeo_feedback_list', 'feedback_list_shortcode');
