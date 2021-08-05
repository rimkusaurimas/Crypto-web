$(document).ready(function () {

    //Navigation
    $(".nav-item.dropdown").mouseenter(function () {
        let dropdownMenu = $(this).children(".dropdown-menu");
        if (!dropdownMenu.is(":visible")) {
            dropdownMenu.addClass("show");
        }
    });

   $(".nav-item.dropdown").mouseout(function () {
        let dropdownMenu = $(this).children(".dropdown-menu");
        if (dropdownMenu.is(":visible")) {
            dropdownMenu.removeClass("show");
        }
    });

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
            percent: 5.58,
            dollarValue: 0.00038,
            value: 0.00568
        }
    };

    $(".pair1").find(".percentage-pair-name").text(clpwPairs.pair1.name);
    $(".pair2").find(".percentage-pair-name").text(clpwPairs.pair2.name);
    $(".pair3").find(".percentage-pair-name").text(clpwPairs.pair3.name);
    $(".pair4").find(".percentage-pair-name").text(clpwPairs.pair4.name);
    $(".pair5").find(".percentage-pair-name").text(clpwPairs.pair5.name);
    $(".pair6").find(".percentage-pair-name").text(clpwPairs.pair6.name);

});