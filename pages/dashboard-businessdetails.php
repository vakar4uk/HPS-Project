<?php

include('navbars_footers/header.php');
include('navbars_footers/top-navbar.php');

?>



<div class="row">

    <div class="col-lg-12">

        <div id="carierdetails-container" class="container">

            <div class="carrier-details">

                <!-- Header text -->
                <div class="header-notification">
                    <div id="hide-btn"><i class="show-hide fas fa-chevron-up fa-2x"></i></div>               
                    <div id="toggle-notification" class="jumbotron">                                
                        <h3>Perfect! So what all states is the service available in?</h3>
                        <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.
                        </p>
                    </div>                   
                </div>
                <!-- Header text -->

                <form id="entity-address" action="">

                    <div class="my-container">

                        <div class="carrier-name">

                            <h3>Business Type</h3>

                            <span id="icons">

<i
class="far fa-envelope fa-1x"></i>

<i
class="fas fa-ellipsis-v fa-1x"
id="menu"></i>

</span>

                            <hr id="hr">

                            <br>






                            <div class="form-group row">

                                <div class="col-md-6">

                                    <button id="business-individual" class="btn btn-md" type="button">Individual</button>

                                </div>

                                <div class="col-md-6">

                                    <button id="business-group" class="btn btn-md" type="button">Group</button>

                                </div>

                            </div>




                            <div class="form-group row">

                                <div class="col-md-3">

                                    <button id="onexchange" class="btn btn-md" type="button">On Exchange</button>

                                </div>

                                <div class="col-md-3">

                                    <button id="offexchange" class="btn btn-md" type="button">Off Exchange</button>

                                </div>

                                <div class="col-md-3">

                                    <input class="form-control" id="input-code-group" type="text" placeholder="Group Carrier Code">

                                </div>

                            </div>





                            <div class="form-group row">

                                <div class="col-md-3">

                                    <input class="form-control" id="input-code-individual-onexchange" type="text" placeholder="Onexchange Carrier Code">

                                </div>

                                <div class="col-md-3">

                                    <input class="form-control" id="input-code-individual-offexchange" type="text" placeholder="Offexchange Carrier Code" </div>


                                </div>



                                <script>
                                    $(document).ready(function () {



                                        /*buttons toggle*/



                                        $("button[id*=onexchange], button[id*=offexchange], input[id*=input-code-individual-onexchange], input[id*=input-code-individual-offexchange], input[id*=input-code-group]").hide();




                                        $("button[id*=business-individual]").click(function () {

                                            $("button[id*=onexchange], button[id*=offexchange]").toggle();

                                        });



                                        $("button[id*=business-individual]").click(function () {

                                            $("input[id*=input-code-individual-onexchange], input[id*=input-code-individual-offexchange]").hide();

                                        });



                                        $("button[id*=onexchange]").click(function () {

                                            $("input[id*=input-code-individual-onexchange]").toggle();

                                        });



                                        $("button[id*=offexchange]").click(function () {

                                            $("input[id*=input-code-individual-offexchange]").toggle();

                                        });


                                        $("button[id*=business-group]").click(function () {

                                            $("input[id*=input-code-group]").toggle();

                                        });





                                        /*menu font awesome icon*/



                                        $(function () {

                                            $.contextMenu({

                                                selector:
                                                '.menu',

                                                callback:
                                                function (key,
                                                    options) {

                                                    var m =
                                                        "clicked: " +
                                                        key;

                                                    window.console &&
                                                        console.log(m) ||
                                                        alert(m);

                                                },

                                                items: {

                                                    "Notes": {
                                                        name:
                                                        "Edit", icon:
                                                        "fa-edit"
                                                    },

                                                    "Customizations": {
                                                        name:
                                                        "Customizations",
                                                        icon: "far fa-sliders-h"
                                                    },

                                                    "Add To-Do": {
                                                        name:
                                                        "Add To-Do", icon:
                                                        "fas fa-clipboard-check"                                                    
}

                                                }

                                            });



                                            $('.menu').on('click',
                                                function (e) {

                                                    console.log('clicked',
                                                        this);

                                                })

                                        });







                                    });

                                </script>


                            </div>

                        </div>

                    </div>

            </div>

        </div>

    </div>

</div>

<?php

include('navbars_footers/footer.php');

?>