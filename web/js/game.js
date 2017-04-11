var Game = {
  start: function() {

  },

  end: function() {

  },

  select: function($cell) {
      this.selected = $cell;
      this.$container.children().removeClass('selected');
      $cell.addClass('selected');
  },

  move: function() {

  },

  $container: $('.border'),
  $selected: null
};

$(function() {
    $('.border div').each(function() {
        var $div = $(this);

        $div.click(function() {
            if ($div.children('img').length) {
                Game.select($div);
            }
        })
    })
});