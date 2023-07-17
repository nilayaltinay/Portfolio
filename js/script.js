let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');


menu.onclick = () => {
   menu.classList.toggle('fa-times');
   header.classList.toggle('active');
   document.body.classList.toggle('active');
}

window.onscroll = () => {
   if (window.innerWidth < 991) {
      menu.classList.remove('fa-times');
      header.classList.remove('active');
      document.body.classList.remove('active');
   }

   document.querySelectorAll('section').forEach(sec => {

      let top = window.scrollY;
      let offset = sec.offsetTop - 150;
      let height = sec.offsetHeight;
      let id = sec.getAttribute('id');

      if (top >= offset && top < offset + height) {
         document.querySelectorAll('.header .navbar a').forEach(links => {
            links.classList.remove('active');
            document.querySelector('.header .navbar a[href*=' + id + ']').classList.add('active')
         });
      };

   });

}


const iso = new Isotope('.portfolio-wrap', {
   itemSelector: '.event-item',
   resizable: true,
   percentPosition: true,
   layoutMode: 'fitRows',
   masonry: {
      isFitWidth: true,
      columnWidth: '.grid-sizer'
   }
});

document.addEventListener('readystatechange', () => {
   if (event.target.readyState === "complete") {
      const iso = new Isotope('.portfolio-wrap', {
         itemSelector: '.event-item',
         resizable: true,
         percentPosition: true,
         layoutMode: 'fitRows',
         masonry: {
            isFitWidth: true,
            columnWidth: '.grid-sizer'
         }
      });
   }
});

// EVENT FILTER - store filter for each group
var filters = {};

var filtersElem = document.querySelector('.filters');
filtersElem.addEventListener('click', function (event) {
   // check for only button clicks
   var isButton = event.target.classList.contains('button');
   if (!isButton) {
      return;
   }

   var buttonGroup = fizzyUIUtils.getParent(event.target, '.button-group');
   var filterGroup = buttonGroup.getAttribute('data-filter-group');
   // set filter for group
   filters[filterGroup] = event.target.getAttribute('data-filter');
   // combine filters
   var filterValue = concatValues(filters);
   // set filter for Isotope
   iso.arrange({ filter: filterValue });
});

// change is-checked class on buttons
var buttonGroups = document.querySelectorAll('.button-group');

for (var i = 0; i < buttonGroups.length; i++) {
   var buttonGroup = buttonGroups[i];
   var onButtonGroupClick = getOnButtonGroupClick(buttonGroup);
   buttonGroup.addEventListener('click', onButtonGroupClick);
}

function getOnButtonGroupClick(buttonGroup) {
   return function (event) {
      // check for only button clicks
      var isButton = event.target.classList.contains('button');
      if (!isButton) {
         return;
      }
      var checkedButton = buttonGroup.querySelector('.is-checked');
      checkedButton.classList.remove('is-checked')
      event.target.classList.add('is-checked');
   }
}

// flatten object by concatting values
function concatValues(obj) {
   var value = '';
   for (var prop in obj) {
      value += obj[prop];
   }
   return value;
}
