    <!-- Bootstrap + Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <script>
        function loadPage(page) {
            const title = document.getElementById("page-title");
            const text = document.getElementById("page-text");
            if (page === "home") {
                title.innerText = "Dashboard";
                text.innerText = "Now you are on the Home page.";
            } else if (page === "about") {
                title.innerText = "About";
                text.innerText = "Now you are on the About page.";
            } else if (page === "contact") {
                title.innerText = "Contact";
                text.innerText = "Now you are on the Contact Us!";
            }else if (page === "notes") {
                title.innerText = "Notes";
                text.innerText = "Now you are on the Notes Us!";
            }
        }
    </script>
</body>

</html>