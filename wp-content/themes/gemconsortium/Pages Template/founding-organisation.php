<?php 
/* 
* Template Name: Founding Organisation Page Template
*/

get_header(); 
?>

<section class="common-banner founding-org-banner">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1 class='h1-heading'>Founding Organisations</h1>
                <p class='text-semibold'>Babson College and London Business School, pioneers in entrepreneurial
                education, are the founding institutions of GEM.</p>
            </div>
        </div>
    </div>
</section>

<section class="sponsor-section">
        <div class="container-lg">
            <div class="row pb-8 justify-content-center align-items-center">
                <div class="col-md-6 col-sm-8">
                    <img src="http://localhost/gemconsortium/wp-content/uploads/2024/08/babson-2.png" class="img-fluid w-100 rounded-corners" alt="">
                </div>
                <div class="col-md-6 col-sm-8 pt-md-0 pt-5">
                    <p class='mb-5'><img src="http://localhost/gemconsortium/wp-content/uploads/2024/08/babson-logo.png" class="img-fluid rounded-corners" alt=""></p>
                    <p><a href="#" target='_blank'>Babson College </a> is recognized internationally as a leader in entrepreneurial management education. Babson grants BS degrees through its innovative undergraduate program and grants MBA and custom MS and MBA degrees through the F.W. Olin Graduate School of Business at Babson College. Babson Executive Education offers executive development programs to experienced managers worldwide.</p>
                </div>
                
            </div>
            <div class="row justify-content-center align-items-center flex-md-row flex-column-reverse"> 
                <div class="col-md-6 col-sm-8 ">
                    <p class='mb-5'><img src="http://localhost/gemconsortium/wp-content/uploads/2024/08/london-school-logo.png" class="img-fluid" alt=""></p>
                    <p><a href="#" target='_blank'>London Business School</a>’s academic strength and global outlook drives original and provocative business thinking. 
                    We challenge conventional wisdom, transform careers and empower our people to change the way the world does business.</p>
                </div>
                <div class="col-md-6 col-sm-8 pb-md-0 pb-4">
                    <img src="http://localhost/gemconsortium/wp-content/uploads/2024/08/london-school.png" class="img-fluid w-100 rounded-corners" alt="">
                </div>
            </div>
        </div>
</section>
<?php
do_shortcode('[share_article]');
?>

<?php
get_footer();