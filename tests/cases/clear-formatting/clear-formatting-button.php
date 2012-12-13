<!doctype html>
<html>
<head>
    <script type="text/javascript" src="../../js/case.js"></script>
    <?php $uri = '../../../src/'; include '../../../src/include.php'; ?>
</head>
<body class="simple">
    <script type="text/javascript">
        rangy.init();
    </script>
    <div class="test-1">
        <h1>Clear Formatting Button 1: Basic</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis {dui id <strong class="cms-bold">erat pellentesque</strong> et rhoncus} nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis {dui id erat pellentesque et rhoncus} nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-1', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>

    <div class="test-2">
        <h1>Clear Formatting Button 2: Complex</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat <em class="cms-italic">{pellentesque et rhoncus nunc semper. <ol><li><del class="cms-strike">Suspendisse
                    malesuada</del></li></ol> hendrerit velit nec tristique.</em> A}liquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat {pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. A}liquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-2', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>

    <div class="test-3">
        <h1>Clear Formatting Button 3: Multi Basic</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis {dui id <strong class="cms-bold">erat pellentesque</strong> et rhoncus} nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. <em class="cms-italic">Suspendisse interdum, nisi nec consectetur</em>
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis {dui id erat pellentesque et rhoncus} nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. <em class="cms-italic">Suspendisse interdum, nisi nec consectetur</em>
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-3', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>

     <div class="test-4">
        <h1>Clear Formatting Button 4: Multi Paragraph Basic</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui {<strong class="cms-bold">id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.</strong>
                </p>
                <p>
                    <strong class="cms-bold">Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse</strong>} interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui {id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse}interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-4', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>

    <div class="test-5">
        <h1>Clear Formatting Button 5: Multi Paragraph Complex</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum {<strong class="cms-bold">dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada <u class="cms-underline">hendrerit velit nec tristique.</u></strong>
                </p><p>
                <u class="cms-underline"><strong class="cms-bold">Aliquam gravida mauris at
                    ligula <ul><li>venenatis rhoncus.</li></ul> Suspendisse}</strong> interdum, nisi</u> nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum {dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse} <u class="underline">interdum, nisi</u> nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-5', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>

    <div class="test-6">
        <h1>Clear Formatting Button 6: Empty Selection in Word</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula <del class="cms-strike">venenatis rhoncus. Suspen{}disse interdum,</del> nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula <del class="cms-strike">venenatis rhoncus. </del>Suspen{}disse<del class="cms-strike"> interdum,</del> nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-6', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>

    <div class="test-7">
        <h1>Clear Formatting Button 7: Empty Selection at the Beginning of a Word</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat <u class="cms-underline">pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada {}hendrerit velit nec tristique.</u>
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat <u class="cms-underline">pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada {}hendrerit velit nec tristique.</u>
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-7', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>
    
    <div class="test-8">
        <h1>Clear Formatting Button 8: Alignment</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat <u class="cms-underline">pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada {}hendrerit velit nec tristique.</u>
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p class="cms-center">
                    {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id eratpellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit} nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-8', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>
    
    <div class="test-9">
        <h1>Clear Formatting Button 9: Two Different Alignments</h1>
        <div class="test-input">
            <div class="editible">
                <p class="cms-right">
                    {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p class="cms-left">
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p class="cms-center">
                    {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id eratpellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-9', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>
    
    <div class="test-10">
        <h1>Clear Formatting Button 10: Alignment and Other Formatting</h1>
        <div class="test-input">
            <div class="editible">
                <p class="cms-right">
                    {Lorem ipsum <u class="cms-underline"> dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique</u>.
                </p><p class="cms-left">
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p class="cms-center">
                    {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id eratpellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-10', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>
    
    <div class="test-11">
        <h1>Clear Formatting Button 11: Image Float</h1>
        <div class="test-input">
            <div class="editible">
                {<img src="../../images/raptor.png" alt="raptor logo" height="50" width="40" class="cms-float-right"  />}
                    <div style="clear: both">
                    </div>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                {<img src="../../images/raptor.png" alt="raptor logo" height="50" width="40" />}
                    <div style="clear: both">
                    </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-11', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>
    
    <div class="test-12">
        <h1>Clear Formatting Button 12: Image Float and text and alignment</h1>
        <div class="test-input">
            <div class="editible">
                <p class="cms-right"> 
                    {Some text that can be <strong class="cms-bold">bold</strong> and <u class="cms-underline">underlined</u> and <em class="cms-italic">italic</em> as 
                    well as being right aligned before clearing the formatting.
                </p>
                <img src="../../images/raptor.png" alt="raptor logo" height="50" width="40" class="cms-float-right"  />}
                    <div style="clear: both">
                    </div>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p> 
                    {Some text that can be bold and underlined and italic as 
                    well as being right aligned before clearing the formatting.
                </p>
                <img src="../../images/raptor.png" alt="raptor logo" height="50" width="40" />}
                    <div style="clear: both">
                    </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-12', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-clear-formatting').trigger('click');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>
</body>
</html>