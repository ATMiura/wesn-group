<?php $theme_url = get_stylesheet_directory_uri(); ?>

<section class="contacts" id="contacts" data-contacts="">
  <div class="contacts__row">
    <div class="container contacts__container">
      <div class="contacts__heading heading heading--1">
        Контакты
      </div>
      <div class="contacts__data">
        <div class="contacts__tel heading heading--2">
          <a href="tel:<?php the_field( 'phone-first', 'option' ); ?>" data-target="clicktophone">
			      <?php the_field( 'phone-first', 'option' ); ?>
          </a>
        </div>

        <div class="contacts__email heading heading--2">
          <a href="mailto:<?php the_field( 'email', 'option' ); ?>" data-email-builder="[&quot;logistic&quot;,&quot;wesn.group&quot;]">
			      <?php the_field( 'email', 'option' ); ?>
          </a>
        </div>

        <div class="contacts__text">
          Адрес
        </div>

        <div class="contacts__address">
          <p><?php the_field( 'address', 'option' ); ?></p>
        </div>
		  
		  <? /*
 
          <div class="contacts__text">
            Следите за нами
          </div>
 
          <div class="contacts__social social">
          <a class="social__link" data-href="" target="_blank" rel="nofollow noopener noreferrer">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="16" cy="16" r="16" fill="black"/>
              <path class="social__path"
                    d="M14.6 25V17.1H12V14.1H14.6V11.9C14.6 9.3 16.2 8 18.4 8C19.5 8 20.4 8.1 20.7 8.1V10.8H19.1C17.9 10.8 17.6 11.4 17.6 12.3V14.1H20.5L20.1 17H17.6V25H14.6Z"/>
            </svg>
          </a>

          <a class="social__link" data-href="" target="_blank" rel="nofollow noopener noreferrer">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="16" cy="16" r="16" fill="black"/>
              <g clip-path="url(#clip0)">
                <path class="social__path"
                      d="M22.4736 13.4898C22.4736 13.3544 22.4736 13.2195 22.4646 13.0853C23.0669 12.6423 23.5868 12.0938 24 11.4655C23.4383 11.7185 22.8425 11.8845 22.2324 11.9578C22.8748 11.5667 23.3557 10.9516 23.5854 10.2269C22.9813 10.5915 22.3204 10.8483 21.6312 10.9865C20.6772 9.95507 19.1614 9.70262 17.9337 10.3707C16.706 11.0388 16.0718 12.4614 16.3866 13.8406C13.9121 13.7145 11.6067 12.526 10.044 10.571C9.22717 12.0009 9.64439 13.8302 10.9968 14.7485C10.507 14.7337 10.028 14.5994 9.6 14.3568C9.6 14.3696 9.6 14.383 9.6 14.3964C9.6004 15.8861 10.6331 17.1691 12.069 17.4641C11.6159 17.5897 11.1405 17.6081 10.6794 17.5177C11.0826 18.7925 12.2379 19.6658 13.5546 19.691C12.4648 20.5618 11.1186 21.0346 9.7326 21.0332C9.48774 21.0327 9.24312 21.0176 9 20.988C10.4074 21.9064 12.0449 22.3936 13.7172 22.3913C19.3776 22.3937 22.4736 17.6251 22.4736 13.4898Z"/>
              </g>
              <defs>
                <clipPath id="clip0">
                  <rect width="16" height="16" fill="white" transform="translate(8 8)"/>
                </clipPath>
              </defs>
            </svg>
          </a>

          <a class="social__link" data-href="" target="_blank" rel="nofollow noopener noreferrer">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="16" cy="16" r="16" fill="black"/>
              <path class="social__path"
                    d="M13.2781 18.1206L13.0135 21.8433C13.3921 21.8433 13.5561 21.6806 13.7528 21.4853L15.5281 19.7886L19.2068 22.4826C19.8815 22.8586 20.3568 22.6606 20.5388 21.8619L22.9535 10.5473L22.9541 10.5466C23.1681 9.54928 22.5935 9.15928 21.9361 9.40394L7.74279 14.8379C6.77412 15.2139 6.78879 15.7539 7.57812 15.9986L11.2068 17.1273L19.6355 11.8533C20.0321 11.5906 20.3928 11.7359 20.0961 11.9986L13.2781 18.1206Z"/>
            </svg>
          </a>
        </div>
        */ ?>
      </div>
    </div>

    <div class="contacts__map" id="map"></div>
  </div>
</section>
