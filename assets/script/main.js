$(document).ready(function () {

    $(".nav-link.dropdown-toggle").hover(function () {
        let dropdownMenu = $(this).children(".nav-link.dropdown-toggle");
        if (dropdownMenu.is(":visible")) {
            dropdownMenu.parent().toggleClass("show");
        }
    });

    const clpwPair = {

        btcusdt: {
            name: "BTC/USDT",
            percent: 9.2,
            dollarValue: 42.234,
            value: 42.234
        },

        ethusdt: {
            name: "ETH/USDT",
            percent: -3.02,
            dollarValue: 1800.23,
            value: 1800.23
        },

        axsbnb: {
            name: "AXS/USDT",
            percent: 15,
            dollarValue: 39.08,
            value: 0.1032
        },

        dogeusdt: {
            name: "DOGE/USDT",
            percent: -4.02,
            dollarValue: 0.3014,
            value: 0.3014
        },

        lunabnb: {
            name: "LUNA/BNB",
            percent: 1,
            dollarValue: 14.94,
            value: 0.04465
        },

        wintrx: {
            name: "WIN/TRX",
            percent: 5.58,
            dollarValue: 0.00038,
            value: 0.00568
        }
    };

    $(".percentage-pair-name").
});