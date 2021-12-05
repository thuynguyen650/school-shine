<button id="btn-ontop" class="btn-ontop" onclick="btnonTop()">
    <i class="fas fa-chevron-left"></i>
</button>
        <script> 
            var btntop = document.getElementById("btn-ontop");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                    btntop.style.display = "block";
                } else {
                    btntop.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function btnonTop() {
                document.body.scrollTop = 0;
                window.scrollTo({top: 0, behavior: 'smooth'});
            }
        </script>