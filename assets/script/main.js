$(document).ready(function () {

    // Crypto Live Preview Widget
    const clpwPairs = {
        pair1: {
            name: "!BTC/USDT",
            percent: 9.2,
            dollarValue: 42.234,
            value: 42.234
        },

        pair2: {
            name: "!ETH/USDT",
            percent: -3.02,
            dollarValue: 1800.23,
            value: 1800.23
        },

        pair3: {
            name: "!AXS/USDT",
            percent: 15,
            dollarValue: 39.08,
            value: 0.1032
        },

        pair4: {
            name: "!DOGE/USDT",
            percent: -4.02,
            dollarValue: 0.3014,
            value: 0.3014
        },

        pair5: {
            name: "!LUNA/BNB",
            percent: 1,
            dollarValue: 14.94,
            value: 0.04465
        },

        pair6: {
            name: "!WIN/TRX",
            percent: 0,
            dollarValue: 0.00038,
            value: 0.00568
        }
    };

    for (let key in clpwPairs) {
        let pair = $("." + key);

        if (pair.length > 0) {
            let procentai = pair.find(".clpw-percent").append(clpwPairs[key].percent + "%");
            if (clpwPairs[key].percent < 0) {
                procentai.css("color", "rgb(246, 70, 93)");
            } else if (clpwPairs[key].percent == 0){
                procentai.css("color", "grey");
            } else {
                procentai.css("color", "rgb(14, 203, 129)");
            }
        }
    }

    // Hero section
    $("#lrnbtn").click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $(".ms-about").offset().top
        }, 1000);
    });

    //Sign up form toggle
    $('#log-in-text').hide();
    $('#sign-up-form').hide();

    $('#log-in, #sign-up').mousedown(function () {
        $('#log-in-text, #sign-up-text').toggle()
        $('#sign-up-form, #log-in-form').toggle()
    });

});