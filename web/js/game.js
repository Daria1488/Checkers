var Game = {
    $cells: [],
    $container: null,
    selected: null,
    currentPlayer: null,
    thisPlayer: {},
    thatPlayer: {},

    start: function() {
        this.$container = $('.border');

        this.$cells = [];
        var $divs = $('.border div');
        var num = 0;
        for(var i = 0; i < 8; i++){
            for(var j = 0; j < 8; j++){
                $cells[i][j] = $divs.eq(num++).click(function() {
                    if ($div.children('img').length) {
                        Game.select(i, j);
                    } else {
                        Game.move(i, j);
                    }
                });
            }
        }
    },

    end: function() {

    },

    select: function(x, y) {
        if (this.selected) {
            this.$cells[this.selected.x, this.selected.y].removeClass('selected');
        }
        this.selected = {x: x, y: y};
        this.$cell[x, y].addClass('selected');
    },

    move: function() {
        
    },
};

$(function() {
    Game.start();
});


