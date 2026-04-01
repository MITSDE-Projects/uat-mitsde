             $(document).ready(function() {
             const cards = $("#facultySlider .col-md-4");
            const cardsPerPage = 3;
            let currentIndex = 0;

            function updateButtons() {
                $("#prevBtn").prop("disabled", currentIndex === 0);
                $("#nextBtn").prop("disabled", currentIndex + cardsPerPage >= cards.length);
            }

            function showCards() {
                cards.hide().removeClass("active");
                for (let i = currentIndex; i < currentIndex + cardsPerPage && i < cards.length; i++) {
                    $(cards[i]).fadeIn().addClass("active");
                }
                updateButtons();
            }

            $("#nextBtn").click(function() {
                if (currentIndex + cardsPerPage < cards.length) {
                    currentIndex += cardsPerPage;
                    showCards();
                }
            });

            $("#prevBtn").click(function() {
                if (currentIndex - cardsPerPage >= 0) {
                    currentIndex -= cardsPerPage;
                    showCards();
                }
            });

            // Initial Load
            showCards();
        });