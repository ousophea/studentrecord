
<div id="center-wrapper">


    <div class="dhe-example-section" id="ex-2-1">
        <div class="dhe-example-section-header">
            <h3 class="dhe-h3 dhe-example-title">Example 2.1: Get items</h3>
            <div class="dhe-example-description">Get a string representing the items (re-order the items to see that it changes).</div>
        </div>
        <div class="dhe-example-section-content">

            <!-- BEGIN: XHTML for example 2.1 -->

            <div id="student_gourps">

                <p><input type="submit" class="input-button" id="btn-get" value="Get items" /></p>
                <p><input type="button" class="add-group" id="btn_add_group" value="Add Group" /></p>
                <div class="column col-sm-3 left first">

                    <ul class="sortable-list">
                        <li class="sortable-item" id="A">Sortable item A</li>
                        <li class="sortable-item" id="B">Sortable item B</li>
                    </ul>

                </div>

                <div class=" col-sm-3 column left">

                    <ul class="sortable-list">
                        <li class="sortable-item" id="C">Sortable item C</li>
                        <li class="sortable-item" id="D">Sortable item D</li>
                    </ul>

                </div>

                <div class="column col-sm-3 left">

                    <ul class="sortable-list">
                        <li class="sortable-item" id="E">Sortable item E</li>
                    </ul>

                </div>
                <div class="column col-sm-3 left">

                    <ul class="sortable-list">
                        <li class="sortable-item" id="u">Sortable item E</li>
                    </ul>

                </div>

                <div class="column col-sm-3 left">

                    <ul class="sortable-list">
                        <li class="sortable-item" id="u">Sortable item E</li>
                    </ul>

                </div>
                <div class="column col-sm-3 left">

                    <ul class="sortable-list">
                        <li class="sortable-item" id="u">Sortable item E</li>
                    </ul>

                </div>
            </div>

            <div class="clearer">&nbsp;</div>

            <!-- END: XHTML for example 2.1 -->

        </div>
    </div>



</div>


<script type="text/javascript">

    $(document).ready(function () {

        // Get items
        function getItems(exampleNr)
        {
            var columns = [];

            $(exampleNr + ' ul.sortable-list').each(function () {
                columns.push($(this).sortable('toArray').join(','));
            });

            return columns.join('|');
        }



        // Example 2.1: Get items
        $('#student_gourps .sortable-list').sortable({
            connectWith: '#student_gourps .sortable-list'
        });

        $('#btn-get').click(function () {
            alert(getItems('#student_gourps'));
        });
        
        // add group
        
        var $set_group = '<div class="column col-sm-3 left"> <ul class="sortable-list"><li class="sortable-item" id="u">&nbsp;ddd</li></ul></div>';
        $('#btn_add_group').click(function () {
           $( "#student_gourps" ).append( $set_group );
        });
//        

    });

</script>
