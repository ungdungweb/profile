<p > This is a red page</p>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h3>Phần mở đầu</h3>
        </div>
        <div class="col-md-6">
            <h3>Ví dụ</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h1>&lt;h1&gt;&lt;/h1&gt</h1>;
        </div>
        <div class="col-md-6">
            <h1>h1.Bootstrap heading</h1>
        </div>
    </div>
</div>
<div align="center">
    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
    <p><del>This line of text is meant to be treated as deleted text.</del></p>
    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
    <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
    <p><u>This line of text will render as underlined</u></p>
    <p><small>This line of text is meant to be treated as fine print.</small></p>
    <p><strong>This line rendered as bold text.</strong></p>
    <p><em>This line rendered as italicized text.</em></p>

    <p><abbr title="attribute">attr</abbr></p>
    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>

    <blockquote class="blockquote text-right">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>


</div>

<table>
<!-- On rows -->
    <tr class="table-active">...</tr>

    <tr class="table-primary">...</tr>
    <tr class="table-secondary">...</tr>
    <tr class="table-success">...</tr>
    <tr class="table-danger">...</tr>
    <tr class="table-warning">...</tr>
    <tr class="table-info">...</tr>
    <tr class="table-light">...</tr>
    <tr class="table-dark">...</tr>

    <!-- On cells (`td` or `th`) -->
    <tr>
        <td class="table-active">...</td>

        <td class="table-primary">...</td>
        <td class="table-secondary">...</td>
        <td class="table-success">...</td>
        <td class="table-danger">...</td>
        <td class="table-warning">...</td>
        <td class="table-info">...</td>
        <td class="table-light">...</td>
        <td class="table-dark">...</td>
    </tr>
</table>

<table class="table">
    <caption>List of users</caption>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>

<div class="alert alert-success" role="alert">
    <a href="#well-done" style="text-decoration: none;"><h4 class="alert-heading">Well done!</h4></a>
    <p style="direction: ltr;
        text-indent: 1cm;
        white-space: normal;
        text-shadow: 0.25em 0.25em 0.5em #0000fa;
    ">
        Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.
        Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, five default responsive tiers, Sass variables and mixins, and dozens of predefined classes.
    </p>
    <hr>
    <p class="mb-0" style="direction: rtl">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>

<div class="alert alert-primary" role="alert">
    This is a primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
    This is a secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
    This is a success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
    This is a danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
    This is a warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
    This is a info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
    This is a light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
    This is a dark alert—check it out!
</div>

<h1>Example heading <span class="badge badge-secondary">New</span></h1>
<h2>Example heading <span class="badge badge-secondary">New</span></h2>
<h3>Example heading <span class="badge badge-secondary">New</span></h3>
<h4>Example heading <span class="badge badge-secondary">New</span></h4>
<h5>Example heading <span class="badge badge-secondary">New</span></h5>
<h6>Example heading <span class="badge badge-secondary">New</span></h6>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="..." alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<p>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Link with href
    </a>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Button with data-target
    </button>
</p>
<div class="collapse" id="collapseExample">
    <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
    </div>
</div>

<div class="card" style="width: 18rem;">
    <img class="card-img-top" style="border: 2px;" src='upload/follow.jpg' alt="Card image cap">
    <div class="card text-center">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>

<!--Navigation-->

<div class="col-md-6">
    <div class="card text-center" >
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item dropdown">
<!--                    <a class="nav-link active" href="http://localhost/basic/web/thanks.html">Active</a>-->
                    <div class="dropdown right">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Active
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a> <br/>
                            <a class="dropdown-item" href="#">Another action</a> <br/>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="btn btn-secondary dropdown" href="http://localhost/basic/web/grừ......html">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="https://fb.com/ahihi_do_ngok.com">Disabled</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<div>
    <div>
        <?php

        $formatter = \Yii::$app->formatter;

        // output: January 1, 2014
        echo $formatter->asDate('2014-01-01', 'long');
        ?>
    </div>
    <br/>
    <div>
        <?php
        // output: 12.50%
        echo $formatter->asPercent(0.125, 2);
        ?>
    </div>
    <br/>
    <div>
        <?php
        // output: <a href="mailto:cebe@example.com">cebe@example.com</a>
        echo $formatter->asEmail('cebe@example.com');
        ?>
    </div>
    <br/>
    <div>
        <?php
        // output: Yes
        echo $formatter->asBoolean(true);
        // it also handles display of null values:

        // output: (not set)
        echo $formatter->asDate(null);

        ?>
    </div>
</div>
<div id="star"></div>