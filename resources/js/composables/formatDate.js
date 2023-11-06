import moment from "moment";

export function formatDate() {
    function dateFormatter(date) {
        return moment(date).format("ll");
    }

    function dateTimeFormatter(date) {
        return moment(date).format("LLL");
    }

    return {
        dateFormatter,
        dateTimeFormatter,
    };
}
