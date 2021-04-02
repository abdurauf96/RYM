jQuery.fn.customSelect = function () {
    this.each(function () {
        const select = $(this);
        const options = $(this).children();
        const wrap = $('<div class="custom-select"></div>')
        const selectButton = $('<div class="custom-select-button select-with"></div>')
        const selectList = $('<ul class="custom-select-list"></ul>');
        const placeholder = $(this).data('placeholder');
        var open = false


        select.on('change', function () {
        })

        options.each(function () {
            selectList.append($('<li></li>').html($(this).html()).attr('data-value', $(this).attr('value')))
        })

        selectButton.on('click', function () {
            if (!open) {
                $(this).next().addClass('open');
                $(this).addClass('active');
                open = true;
            } else {
                $(this).next().removeClass('open');
                $(this).removeClass('active');
                open = false;
            }
        })

        selectList.find('li').on('click', function () {
            selectButton.html($(this).html());
            $(this).parent().removeClass('open');
            $(this).parent().parent().find('.custom-select-button').removeClass('active');
            open = false;
            select.val($(this).data('value'))
        })

        $(window).on('click', function (e) {
            if (e.target !== select.parent().find('.custom-select-button')[0]) {
                select.parent().find('ul').removeClass('open');
                open = false;
                select.parent().find('.custom-select-button').removeClass('active')
            }
        });


        $(this).css('display', 'none');
        wrap.append(selectButton.html(placeholder));
        wrap.append(selectList);
        $(this).parent().append(wrap)

    })
}
