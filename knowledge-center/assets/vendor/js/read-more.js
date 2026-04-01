$(document).ready(function () {
                    $('.toggle-btn').click(function () {
                        // Sab card ke invisible-content ko hide karo
                        $('.invisible-content').slideUp(500);
                        $('.toggle-btn').text('Read More');

                        // Current card ka invisible-content find karo
                        var card = $(this).closest('.card');
                        var invisibleContent = card.find('.invisible-content');

                        // Agar current wale card ka content already hidden hai to show karo
                        if (invisibleContent.is(':hidden')) {
                            invisibleContent.slideDown(500);
                            $(this).text('Read Less');
                        } else {
                            $(this).text('Read More');
                        }
                    });
                });