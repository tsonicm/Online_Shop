$(".buyButton").click(function() {
    var price = $(this).prev().text();
    var name = $(this).prev().prev().text();
    name = name.substring(0, name.lastIndexOf(" "));
    name = name.replace(/\s+/g, '-').toLowerCase();
    price += " 1";
    sessionStorage.setItem(name, price);
});