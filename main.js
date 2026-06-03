
    document.addEventListener('DOMContentLoaded', () => {
        const pages = document.querySelectorAll('.page-content'); // Tất cả trang
        const pageLinks = document.querySelectorAll('.page-number'); // Nút phân trang
        const prevButton = document.querySelector('.prev'); // Nút trước
        const nextButton = document.querySelector('.next'); // Nút sau
        let currentPage = 1;

        function updatePagination(page) {
            // Ẩn tất cả trang
            pages.forEach((p) => (p.style.display = 'none'));
            // Hiển thị trang hiện tại
            document.querySelector(`.page-content[data-page="${page}"]`).style.display = 'block';

            // Đặt nút active
            pageLinks.forEach((link) => link.classList.remove('active'));
            document.querySelector(`.page-number[data-page="${page}"]`).classList.add('active');

            // Điều chỉnh trạng thái nút Previous và Next
            prevButton.classList.toggle('disabled', page === 1);
            nextButton.classList.toggle('disabled', page === pages.length);
        }

        // Xử lý khi nhấn nút phân trang
        pageLinks.forEach((link) => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = parseInt(link.dataset.page);
                currentPage = page;
                updatePagination(page);
            });
        });

        // Xử lý nút Previous
        prevButton.addEventListener('click', (e) => {
            e.preventDefault();
            if (currentPage > 1) {
                currentPage--;
                updatePagination(currentPage);
            }
        });

        // Xử lý nút Next
        nextButton.addEventListener('click', (e) => {
            e.preventDefault();
            if (currentPage < pages.length) {
                currentPage++;
                updatePagination(currentPage);
            }
        });

        // Hiển thị trang đầu tiên khi tải
        updatePagination(currentPage);
    });

