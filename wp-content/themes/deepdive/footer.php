
<?php
    $contacts = get_field('contacts', 'option');
?>
        <footer>
            <div class="container">
                <div class="top-row">
                    <div class="logo-wrap">
                        <?php 
                            $footer_logo = get_field('footer_logo', 'option');
                            if( $footer_logo ):
                        ?>
                                <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo bloginfo();?>">
                        <?php
                            endif;
                        ?>
                    </div>
                    <div class="social-links">
                        <?php if( $contacts['facebook'] != '' ): ?>
                            <div class="social-item facebook">
                                <a href="<?php echo $contacts['facebook']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4033_642)">
                                        <path d="M24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12Z" fill="white"/>
                                        <path d="M10.08 15.6V23.76C10.08 23.8925 10.1875 24 10.32 24H13.68C13.8125 24 13.92 23.8925 13.92 23.76V15.6C13.92 15.4675 14.0275 15.36 14.16 15.36H16.56C16.6925 15.36 16.8 15.2525 16.8 15.12V12.24C16.8 12.1075 16.6925 12 16.56 12H14.16C14.0275 12 13.92 11.8927 13.92 11.7602V9.6C13.92 8.64 15.12 8.16 15.6 8.16H17.04C17.1725 8.16 17.28 8.05255 17.28 7.92V5.04C17.28 4.90745 17.1726 4.8 17.04 4.8H13.92C11.616 4.8 10.08 7.2 10.08 8.64V11.76C10.08 11.8925 9.97255 12 9.84 12H7.44C7.30745 12 7.2 12.1075 7.2 12.24V15.12C7.2 15.2525 7.30745 15.36 7.44 15.36H9.84C9.97255 15.36 10.08 15.4675 10.08 15.6Z" fill="black"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_4033_642">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </a>    
                            </div>
                        <?php endif; ?>
                        <?php if( $contacts['instagram'] != '' ): ?>
                            <div class="social-item instagram">
                                <a href="<?php echo $contacts['instagram']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4033_644)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.05273 0.072C8.33236 0.0130909 8.74036 0 12 0C15.2596 0 15.6676 0.0141818 16.9462 0.072C18.2247 0.129818 19.0975 0.333818 19.8611 0.629454C20.6607 0.931636 21.3862 1.404 21.9862 2.01491C22.5971 2.61382 23.0684 3.33818 23.3695 4.13891C23.6662 4.90255 23.8691 5.77527 23.928 7.05164C23.9869 8.33345 24 8.74145 24 12C24 15.2596 23.9858 15.6676 23.928 16.9473C23.8702 18.2236 23.6662 19.0964 23.3695 19.86C23.0684 20.6608 22.5963 21.3864 21.9862 21.9862C21.3862 22.5971 20.6607 23.0684 19.8611 23.3695C19.0975 23.6662 18.2247 23.8691 16.9484 23.928C15.6676 23.9869 15.2596 24 12 24C8.74036 24 8.33236 23.9858 7.05273 23.928C5.77636 23.8702 4.90364 23.6662 4.14 23.3695C3.33919 23.0683 2.61362 22.5963 2.01382 21.9862C1.40332 21.3869 0.930889 20.6617 0.629454 19.8611C0.333818 19.0975 0.130909 18.2247 0.072 16.9484C0.0130909 15.6665 0 15.2585 0 12C0 8.74036 0.0141818 8.33236 0.072 7.05382C0.129818 5.77527 0.333818 4.90255 0.629454 4.13891C0.931334 3.33827 1.40413 2.61307 2.01491 2.01382C2.61386 1.40346 3.3387 0.931029 4.13891 0.629454C4.90255 0.333818 5.77527 0.130909 7.05164 0.072H7.05273ZM16.8491 2.232C15.5836 2.17418 15.204 2.16218 12 2.16218C8.796 2.16218 8.41636 2.17418 7.15091 2.232C5.98036 2.28545 5.34545 2.48073 4.92218 2.64545C4.36255 2.86364 3.96218 3.12218 3.54218 3.54218C3.14405 3.92951 2.83765 4.40103 2.64545 4.92218C2.48073 5.34545 2.28545 5.98036 2.232 7.15091C2.17418 8.41636 2.16218 8.796 2.16218 12C2.16218 15.204 2.17418 15.5836 2.232 16.8491C2.28545 18.0196 2.48073 18.6545 2.64545 19.0778C2.83745 19.5982 3.144 20.0705 3.54218 20.4578C3.92945 20.856 4.40182 21.1625 4.92218 21.3545C5.34545 21.5193 5.98036 21.7145 7.15091 21.768C8.41636 21.8258 8.79491 21.8378 12 21.8378C15.2051 21.8378 15.5836 21.8258 16.8491 21.768C18.0196 21.7145 18.6545 21.5193 19.0778 21.3545C19.6375 21.1364 20.0378 20.8778 20.4578 20.4578C20.856 20.0705 21.1625 19.5982 21.3545 19.0778C21.5193 18.6545 21.7145 18.0196 21.768 16.8491C21.8258 15.5836 21.8378 15.204 21.8378 12C21.8378 8.796 21.8258 8.41636 21.768 7.15091C21.7145 5.98036 21.5193 5.34545 21.3545 4.92218C21.1364 4.36255 20.8778 3.96218 20.4578 3.54218C20.0705 3.14408 19.5989 2.83768 19.0778 2.64545C18.6545 2.48073 18.0196 2.28545 16.8491 2.232ZM10.4673 15.6993C11.3233 16.0556 12.2764 16.1037 13.1639 15.8353C14.0514 15.567 14.8182 14.9988 15.3334 14.2279C15.8485 13.457 16.0801 12.5311 15.9884 11.6085C15.8968 10.6858 15.4876 9.82361 14.8309 9.16909C14.4123 8.7507 13.906 8.43034 13.3487 8.23107C12.7914 8.0318 12.1968 7.95857 11.6078 8.01667C11.0188 8.07477 10.45 8.26274 9.94233 8.56705C9.43468 8.87136 9.00081 9.28445 8.67197 9.77656C8.34312 10.2687 8.12748 10.8276 8.04056 11.413C7.95365 11.9985 7.99762 12.596 8.16932 13.1624C8.34101 13.7288 8.63616 14.2501 9.03351 14.6888C9.43087 15.1275 9.92054 15.4726 10.4673 15.6993ZM7.63854 7.63854C8.2113 7.06579 8.89126 6.61146 9.6396 6.30148C10.3879 5.99151 11.19 5.83197 12 5.83197C12.81 5.83197 13.6121 5.99151 14.3604 6.30148C15.1087 6.61146 15.7887 7.06579 16.3615 7.63854C16.9342 8.2113 17.3885 8.89126 17.6985 9.6396C18.0085 10.3879 18.168 11.19 18.168 12C18.168 12.81 18.0085 13.6121 17.6985 14.3604C17.3885 15.1087 16.9342 15.7887 16.3615 16.3615C15.2047 17.5182 13.6359 18.168 12 18.168C10.3641 18.168 8.79527 17.5182 7.63854 16.3615C6.48181 15.2047 5.83197 13.6359 5.83197 12C5.83197 10.3641 6.48181 8.79527 7.63854 7.63854ZM19.536 6.75055C19.6779 6.61666 19.7916 6.45565 19.8701 6.27706C19.9487 6.09847 19.9907 5.90593 19.9935 5.71083C19.9964 5.51574 19.9601 5.32205 19.8867 5.14125C19.8134 4.96044 19.7045 4.79619 19.5665 4.65822C19.4285 4.52026 19.2643 4.41137 19.0835 4.33802C18.9027 4.26467 18.709 4.22834 18.5139 4.23118C18.3188 4.23403 18.1263 4.27599 17.9477 4.35458C17.7691 4.43317 17.6081 4.54679 17.4742 4.68873C17.2138 4.96476 17.0712 5.3314 17.0768 5.71083C17.0823 6.09026 17.2355 6.45259 17.5038 6.72092C17.7721 6.98924 18.1345 7.14243 18.5139 7.14796C18.8933 7.15349 19.26 7.01093 19.536 6.75055Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_4033_644">
                                            <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="middle-row">
                    <div class="columns display-flex">
                        <div class="column column-left">
                            <div class="subscription-wrap">
                                <div class="title">Sign up to our newsletter and stay up to date</div>
                                <div class="form-wrap">
                                    <?php
                                        $form = get_field('footer_form', 'option');
                                        if( $form != '' ):
                                           echo do_shortcode( $form );
                                        endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="column column-right">
                            <div class="image-wrap">
                                <?php 
                                    $footer_image = get_field('footer_image', 'option');
                                    if( $footer_image ):
                                ?>
                                        <img src="<?php echo $footer_image['url']; ?>" alt="<?php echo $footer_image['alt'];?>">
                                <?php
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-row">
                    <div class="columns display-flex">
                        <div class="column column-left">
                            <div class="contacts">
                                <?php
                                    if( $contacts['address'] != '' ):
                                ?>
                                        <p>Address:</p>
                                        <p><?php echo $contacts['address']; ?></p>                                
                                <?php
                                    endif;
                                ?>
                            </div>
                        </div>
                        <div class="column column-right">
                            <div class="social-links">
                                <?php if( $contacts['facebook'] != '' ): ?>
                                    <div class="social-item facebook">
                                        <a href="<?php echo $contacts['facebook']; ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_4033_642)">
                                                <path d="M24 12C24 18.6274 18.6274 24 12 24C5.37258 24 0 18.6274 0 12C0 5.37258 5.37258 0 12 0C18.6274 0 24 5.37258 24 12Z" fill="white"/>
                                                <path d="M10.08 15.6V23.76C10.08 23.8925 10.1875 24 10.32 24H13.68C13.8125 24 13.92 23.8925 13.92 23.76V15.6C13.92 15.4675 14.0275 15.36 14.16 15.36H16.56C16.6925 15.36 16.8 15.2525 16.8 15.12V12.24C16.8 12.1075 16.6925 12 16.56 12H14.16C14.0275 12 13.92 11.8927 13.92 11.7602V9.6C13.92 8.64 15.12 8.16 15.6 8.16H17.04C17.1725 8.16 17.28 8.05255 17.28 7.92V5.04C17.28 4.90745 17.1726 4.8 17.04 4.8H13.92C11.616 4.8 10.08 7.2 10.08 8.64V11.76C10.08 11.8925 9.97255 12 9.84 12H7.44C7.30745 12 7.2 12.1075 7.2 12.24V15.12C7.2 15.2525 7.30745 15.36 7.44 15.36H9.84C9.97255 15.36 10.08 15.4675 10.08 15.6Z" fill="black"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_4033_642">
                                                    <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                        </a>    
                                    </div>
                                <?php endif; ?>
                                <?php if( $contacts['instagram'] != '' ): ?>
                                    <div class="social-item instagram">
                                        <a href="<?php echo $contacts['instagram']; ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_4033_644)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.05273 0.072C8.33236 0.0130909 8.74036 0 12 0C15.2596 0 15.6676 0.0141818 16.9462 0.072C18.2247 0.129818 19.0975 0.333818 19.8611 0.629454C20.6607 0.931636 21.3862 1.404 21.9862 2.01491C22.5971 2.61382 23.0684 3.33818 23.3695 4.13891C23.6662 4.90255 23.8691 5.77527 23.928 7.05164C23.9869 8.33345 24 8.74145 24 12C24 15.2596 23.9858 15.6676 23.928 16.9473C23.8702 18.2236 23.6662 19.0964 23.3695 19.86C23.0684 20.6608 22.5963 21.3864 21.9862 21.9862C21.3862 22.5971 20.6607 23.0684 19.8611 23.3695C19.0975 23.6662 18.2247 23.8691 16.9484 23.928C15.6676 23.9869 15.2596 24 12 24C8.74036 24 8.33236 23.9858 7.05273 23.928C5.77636 23.8702 4.90364 23.6662 4.14 23.3695C3.33919 23.0683 2.61362 22.5963 2.01382 21.9862C1.40332 21.3869 0.930889 20.6617 0.629454 19.8611C0.333818 19.0975 0.130909 18.2247 0.072 16.9484C0.0130909 15.6665 0 15.2585 0 12C0 8.74036 0.0141818 8.33236 0.072 7.05382C0.129818 5.77527 0.333818 4.90255 0.629454 4.13891C0.931334 3.33827 1.40413 2.61307 2.01491 2.01382C2.61386 1.40346 3.3387 0.931029 4.13891 0.629454C4.90255 0.333818 5.77527 0.130909 7.05164 0.072H7.05273ZM16.8491 2.232C15.5836 2.17418 15.204 2.16218 12 2.16218C8.796 2.16218 8.41636 2.17418 7.15091 2.232C5.98036 2.28545 5.34545 2.48073 4.92218 2.64545C4.36255 2.86364 3.96218 3.12218 3.54218 3.54218C3.14405 3.92951 2.83765 4.40103 2.64545 4.92218C2.48073 5.34545 2.28545 5.98036 2.232 7.15091C2.17418 8.41636 2.16218 8.796 2.16218 12C2.16218 15.204 2.17418 15.5836 2.232 16.8491C2.28545 18.0196 2.48073 18.6545 2.64545 19.0778C2.83745 19.5982 3.144 20.0705 3.54218 20.4578C3.92945 20.856 4.40182 21.1625 4.92218 21.3545C5.34545 21.5193 5.98036 21.7145 7.15091 21.768C8.41636 21.8258 8.79491 21.8378 12 21.8378C15.2051 21.8378 15.5836 21.8258 16.8491 21.768C18.0196 21.7145 18.6545 21.5193 19.0778 21.3545C19.6375 21.1364 20.0378 20.8778 20.4578 20.4578C20.856 20.0705 21.1625 19.5982 21.3545 19.0778C21.5193 18.6545 21.7145 18.0196 21.768 16.8491C21.8258 15.5836 21.8378 15.204 21.8378 12C21.8378 8.796 21.8258 8.41636 21.768 7.15091C21.7145 5.98036 21.5193 5.34545 21.3545 4.92218C21.1364 4.36255 20.8778 3.96218 20.4578 3.54218C20.0705 3.14408 19.5989 2.83768 19.0778 2.64545C18.6545 2.48073 18.0196 2.28545 16.8491 2.232ZM10.4673 15.6993C11.3233 16.0556 12.2764 16.1037 13.1639 15.8353C14.0514 15.567 14.8182 14.9988 15.3334 14.2279C15.8485 13.457 16.0801 12.5311 15.9884 11.6085C15.8968 10.6858 15.4876 9.82361 14.8309 9.16909C14.4123 8.7507 13.906 8.43034 13.3487 8.23107C12.7914 8.0318 12.1968 7.95857 11.6078 8.01667C11.0188 8.07477 10.45 8.26274 9.94233 8.56705C9.43468 8.87136 9.00081 9.28445 8.67197 9.77656C8.34312 10.2687 8.12748 10.8276 8.04056 11.413C7.95365 11.9985 7.99762 12.596 8.16932 13.1624C8.34101 13.7288 8.63616 14.2501 9.03351 14.6888C9.43087 15.1275 9.92054 15.4726 10.4673 15.6993ZM7.63854 7.63854C8.2113 7.06579 8.89126 6.61146 9.6396 6.30148C10.3879 5.99151 11.19 5.83197 12 5.83197C12.81 5.83197 13.6121 5.99151 14.3604 6.30148C15.1087 6.61146 15.7887 7.06579 16.3615 7.63854C16.9342 8.2113 17.3885 8.89126 17.6985 9.6396C18.0085 10.3879 18.168 11.19 18.168 12C18.168 12.81 18.0085 13.6121 17.6985 14.3604C17.3885 15.1087 16.9342 15.7887 16.3615 16.3615C15.2047 17.5182 13.6359 18.168 12 18.168C10.3641 18.168 8.79527 17.5182 7.63854 16.3615C6.48181 15.2047 5.83197 13.6359 5.83197 12C5.83197 10.3641 6.48181 8.79527 7.63854 7.63854ZM19.536 6.75055C19.6779 6.61666 19.7916 6.45565 19.8701 6.27706C19.9487 6.09847 19.9907 5.90593 19.9935 5.71083C19.9964 5.51574 19.9601 5.32205 19.8867 5.14125C19.8134 4.96044 19.7045 4.79619 19.5665 4.65822C19.4285 4.52026 19.2643 4.41137 19.0835 4.33802C18.9027 4.26467 18.709 4.22834 18.5139 4.23118C18.3188 4.23403 18.1263 4.27599 17.9477 4.35458C17.7691 4.43317 17.6081 4.54679 17.4742 4.68873C17.2138 4.96476 17.0712 5.3314 17.0768 5.71083C17.0823 6.09026 17.2355 6.45259 17.5038 6.72092C17.7721 6.98924 18.1345 7.14243 18.5139 7.14796C18.8933 7.15349 19.26 7.01093 19.536 6.75055Z" fill="white"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_4033_644">
                                                    <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="image-wrap">
                                <?php 
                                    $footer_image = get_field('footer_image', 'option');
                                    if( $footer_image ):
                                ?>
                                        <img src="<?php echo $footer_image['url']; ?>" alt="<?php echo $footer_image['alt'];?>">
                                <?php
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main> 
<?php wp_footer(); ?>
</body>
</html>
