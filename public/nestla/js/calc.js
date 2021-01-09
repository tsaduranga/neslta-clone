$(function () {
    change_plan();
});

function calc() {
    var inv_plan_error = false;
    var inv_amnt_error = false;
    var inv_days_error = false;
    var plan = $( "input[name='inv_plan']:checked" ).val();
    var amount = parseFloat($('#inv_amount').val());
    var compound = 0;
    var min_percent = 0, max_percent = 0, days = 0, total_return = 0, total_profit = 0, min_amount = 0, max_amount = 0;

    switch (plan) {
        case 'plan1':
            if (amount >= 20 && amount <= 99999999) {
                min_percent = 17;
                days= 3;
            }
            else {
                inv_amnt_error = true;
                min_amount = 20;
                max_amount = 99999999;
            }
            break;
        case 'plan2':
            if (amount >= 20 && amount <= 99999999) {
                min_percent = 37;
                max_percent = 2;
                days= 5;
            }
            else {
                inv_amnt_error = true;
                min_amount = 20;
                max_amount = 99999999;
            }
            break;
        case 'plan3':
            if (amount >= 20 && amount <= 99999999) {
                min_percent = 65;
                max_percent = 2.5;
                days= 7;
            }
            else {
                inv_amnt_error = true;
                min_amount = 20;
                max_amount = 99999999;
            }
            break;
        case 'plan4':
            if (amount >= 20 && amount <= 99999999) {
                min_percent = 93;
                max_percent = 2.9;
                days= 9;
            }
            else {
                inv_amnt_error = true;
                min_amount = 20;
                max_amount = 99999999;
            }
            break;
        default:
            inv_plan_error = true;
            break;
    }

    if(!days)
    {
        inv_days_error = true;
    }

    if (inv_amnt_error || inv_days_error || inv_plan_error) {
        $('#total_profit').html("<span style='color:#c32e01;'>N/A</span>");
        $('#total_return').html("<span style='color:#c32e01;'>N/A</span>");
    }
    else {


            total_profit = amount*(min_percent/100);
    	    total_return = total_profit+amount;


            $('#total_profit').text('$' + total_profit.toFixedDown(2));
            $('#total_return').text('$' + total_return.toFixedDown(2));
            $('#inv_days').attr('readonly', true).val(days);

    }

}

Number.prototype.toFixedDown = function (digits) {
    var re = new RegExp("(\\d+\\.\\d{" + digits + "})(\\d)"),
        m = this.toString().match(re);
    return m ? parseFloat(m[1]) : this.valueOf();
};

function change_plan()
{

    calc();
}