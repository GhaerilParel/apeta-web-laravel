//service section owl carousel
$(".fruits_owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    autoHeight: true,
    nav: true,
    navText: [
        '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
        '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
    ],
    responsive: {
        0: {
            items: 1,
        },
        576: {
            items: 2,
        },
        768: {
            items: 3,
        },
        991: {
            items: 4,
        },
    },
});


// Search Produk
document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search-input");
    const searchButton = document.getElementById("search-button");
    const produkContainers = document.querySelectorAll(".produk");

    searchInput.addEventListener("keydown", function (event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        searchButton.click();
      }
    });

    searchButton.addEventListener("click", function () {
        const searchTerm = searchInput.value.toLowerCase();
        console.log("Search Term:", searchTerm);
      
        let anyResults = false;
      
        produkContainers.forEach(function (produkContainer) {
          const productName = produkContainer.querySelector("h4").textContent.toLowerCase();
          console.log("Product Name:", productName);
      
          if (productName.includes(searchTerm)) {
            produkContainer.style.display = "block";
            anyResults = true;
          } else {
            produkContainer.style.display = "none";
          }
        });
      
        console.log("Any Results:", anyResults);
      
        if (!anyResults) {
          Swal.fire({
            icon: 'error',
            title: 'Produk Tidak Ditemukan!',
          });
        }
      });
});

  
