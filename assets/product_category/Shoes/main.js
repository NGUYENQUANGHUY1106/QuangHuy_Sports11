
// thay đổi ảnh tương ứng 
    document.querySelectorAll('.sub_img .img-fluid').forEach(img => {
        img.addEventListener('mouseover', function() {
            // Tìm kiếm phần tử 'image' trong phần tử cha gần nhất
            const mainImage_Shoes = this.closest('.col-md-4').querySelector('.card .card-img-top ');
            // Cập nhật hình ảnh chính
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
    