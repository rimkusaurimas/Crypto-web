$(document).ready(function () {

    $(".nav-link.dropdown-toggle").hover(function () {
        let dropdownMenu = $(this).children(".nav-link.dropdown-toggle");
        if (dropdownMenu.is(":visible")) {
            dropdownMenu.parent().toggleClass("show");
        }
    });

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
            percent: 5.58,
            dollarValue: 0.00038,
            value: 0.00568
        }
    };

    $("#percPairName1").text(clpwPairs.pair1.name);
    $("#percPairName2").text(clpwPairs.pair2.name);
    $("#percPairName3").text(clpwPairs.pair3.name);
    $("#percPairName4").text(clpwPairs.pair4.name);
    $("#percPairName5").text(clpwPairs.pair5.name);
    $("#percPairName6").text(clpwPairs.pair6.name);

    
    $(window).load(function() {

        $(".hero-image").animate({
            top: -200
        }, 1500);
    });

});