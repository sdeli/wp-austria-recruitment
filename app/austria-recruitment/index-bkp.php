<!DOCTYPE html>
<html lang="en">
<% include partials/_blog-head.ejs %>

    <body>
        <% include partials/_blog-navbar.ejs %>

            <section class="container">
                <div class="row">
                    <% include partials/_logo-stripe.ejs %>
                </div>
            </section>

            <% include partials/_jumbotron.ejs %>
                <section class="container main-info-area">
                    <div class="row">

                        <div class="info-feed col-btm-12 col-gutter-z-btm-both col-gutter-n-sm-both col-md-8">
                            <% include partials/content/_main-posts.ejs %>
                                <% include partials/_communication--apply.ejs %>
                        </div> <!-- info-feed end -->

                        <aside
                            class="widgets col-btm-12 col-gutter-s-btm-both col-gutter-n-sm-both col-md-4 col-gutter-n-md-right col-gutter-z-md-left">
                            <% include partials/_communication.ejs %>
                        </aside>

                    </div> <!-- row -->
                </section> <!-- main-info-area end -->

                <% include partials/_blog-footer.ejs %>
                    <% include partials/_modal.ejs %>
                        <% include partials/_blog-scripts.ejs %>
    </body>

</html>