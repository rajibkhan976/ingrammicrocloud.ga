/* global $, slidesToShow, country, categoryDescriptions, backgroundColors, icons */
/*eslint no-unused-vars: 0 */

function sanitize(title) {
  return title.toLowerCase().replace(/ |&/g, '-').replace(/(-)\1+/g, '-');
}

function dashesToUnderscores(str) {
  return str.replace(/-/g, '_');
}

function getSvgIcon(categoryName) {
  return icons[categoryName];
}

function getCurrentPageSlug() {
  return window.location.href.split('/')[window.location.href.split('/').length - 2];
}

function getCategoryJson(currentLangJson, categoryName) {
  
  var categoryMarkup = '';
  
  currentLangJson.forEach(function(column) {
    column.forEach(function(category) {
      if (sanitize(category.CategoryName) == categoryName) {
        categoryMarkup = generateSolutionMarkup(category);
      }
    });
  });
  
  return categoryMarkup;
  
}

function renderCategorySolutions(options) {
  var markup = getCategoryJson(options.currentLangJson, options.categoryName);
  
  jQuery('#category-solutions').html('');
  jQuery(markup).appendTo('#category-solutions');

  // Reinitialize SlickJS   
//   slidesToShow: 3,
//  slidesToScroll: 1,
//  autoplay: true,
//  autoplaySpeed: 2000,
  jQuery('#category-solutions').hide().fadeIn(350).slick({
    slidesToShow: 3,
    //slidesToShow: options.slidesToShow,
    dots: true,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1 
      }
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1     
      }
    },{
     breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1     
      }
    }]
  });

}

function generateSolutionMarkup(categoryJson) {
        var markup = '';

        categoryJson.SubCategories.forEach(function(solution, i) {
          
          var _options = {
            CategoryName: solution.CategoryName,
            vendorName: solution.CategoryName.split(/ - (.+)?/)[0],
            sanitizedVendorName: sanitize(solution.CategoryName.split(/ - (.+)?/)[0]),
            solutionName: solution.CategoryName.split(/ - (.+)?/)[1],
            country:country,
            url: solution.Url
          };
          
          markup +=
            '<div class="solution"> \
              <a href="https://' + _options.country + '.cloud.im' + _options.url + '" target="_blank"> \
                <div class="solution-container"> \
                  <div class="top-half"> \
                    <div class="logo" data-vendor="' + _options.sanitizedVendorName + '"><img class="img-responsive" src="/wp-content/themes/bandaid/img/logos/' + _options.sanitizedVendorName + '.png" onError="this.style.display=\'none\';" /></div> \
                  </div> \
                  <div class="bottom-half" style="background-color: #' + backgroundColors[i] + '"> \
                    <div class="vendor"><strong>'+_options.vendorName+'</strong></div> \
                    <div class="title">';
                    if(typeof _options.solutionName == "undefined") 
                        markup +=_options.CategoryName; 
                    else 
                        markup +=_options.solutionName;
             markup += '</div> \
                  </div> \
                </div> \
              </a> \
            </div>';

          markup = markup.replace('undefined', '');
        });

        return markup;
}

function getSelectedCategoryDescription(categoryName, type, language) {
  if (typeof categoryDescriptions[categoryName] == 'undefined') {
    return;
  }

  return categoryDescriptions[categoryName][type];
}