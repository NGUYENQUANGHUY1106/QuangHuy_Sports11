// Đảm bảo đoạn mã thay thế ảnh chính vẫn hoạt động
document.querySelectorAll('.sub_img .img-fluid').forEach(img => {
    img.addEventListener('mouseover', function() {
        const mainImage_Shoes = this.closest('.col-md-4').querySelector('.card .card-img-top');
        mainImage_Shoes.src = this.dataset.src;
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const productElements = document.querySelectorAll('.col-md-4');
    
    productElements.forEach(product => {
        const infoProduct = product.querySelector('.card-body');
        const subInfoProduct = product.querySelector('.sub_img');

        infoProduct.addEventListener('mouseenter', function() {
            infoProduct.style.display = 'none';  
            subInfoProduct.style.display = 'flex'; 
        });

        subInfoProduct.addEventListener('mouseleave', function() {
            subInfoProduct.style.display = 'none'; 
            infoProduct.style.display = 'block'; 
        });
    });
});
