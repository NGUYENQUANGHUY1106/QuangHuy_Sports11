
// thay đổi ảnh tương ứng 
    document.querySelectorAll('.sub_img img').forEach(img => {
        img.addEventListener('mouseover', function() {
            // Tìm kiếm phần tử 'image' trong phần tử cha gần nhất
            const mainImage_Shoes = this.closest('.product_right_center_content').querySelector('.image img');
            // Cập nhật hình ảnh chính
            mainImage_Shoes.src = this.dataset.src;
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        const productElements = document.querySelectorAll('.product_right_center_content');
    
        productElements.forEach(product => {
            const infoProduct = product.querySelector('.information_product');
            const subInfoProduct = product.querySelector('.sub_information_product');
    
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
    