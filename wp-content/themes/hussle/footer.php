        <footer class="footer text-center py-2 theme-bg-dark">
            
        </footer>

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            
            <?php 
                echo "<p class='col-md-4 mb-0 text-muted'>" . date("Y") . " Company, Inc</p>";
            ?>

            <?php
                $authorURL = wp_get_theme()->get('AuthorURI');
                $author = wp_get_theme()->get('Author');
                echo "<p class='copyright col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none'><a target='_blank' href='$authorURL'>$author</a></p>";
            ?>

            <?php
                dynamic_sidebar('footer-1');
            ?>

        </footer>

    </div>
</div>

<?php
	wp_footer();
?>

</body>
</html> 
