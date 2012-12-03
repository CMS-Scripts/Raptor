function testEditor(container, action, format) {
    var html = $(container).find('.test-input').html();
    var output = $('<div>').addClass('test-output').html(html).appendTo(container);
    var diff = $('<div>').addClass('test-diff').appendTo(container);
    var expected = $('.test-expected');
    output.find('.editible').editor({
        autoEnable: true,
        urlPrefix: '../../../src/'
    });
    setTimeout(function() {
        var ranges = tokensToRanges(output.find('.editible'));
        rangy.getSelection().setRanges(ranges);
        action(output);
        diff.html(diffstr(expected.html(), output.html()));
        if (output.html() !== expected.html()) {
            fail(container);
        } else {
            pass(container);
        }
    }, 100);
}

       
            