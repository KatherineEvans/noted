export function formatCurrency() {
    function currencyFormatter(amount) {
        return "$" + amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    return {
        currencyFormatter,
    };
}
