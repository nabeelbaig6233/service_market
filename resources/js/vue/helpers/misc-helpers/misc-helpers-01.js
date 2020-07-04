/**
 * Miscellaneous Helpers - 01
 * ============================================
 * These are some of the miscellaneous helpers
 * that are used often in the application. Use
 * another file if number of these helpers
 * increases to maintain readability & ease
 * ============================================
 */

export const trimChar = (string, character, recursive = true) => {
    while (string.charAt(0) === character) {
        string = string.substr(1);
        if (!recursive) break;
    }
    while (string.charAt(string.length - 1) === character) {
        string = string.substr(0, string.length - 1);
        if (!recursive) break;
    }
    return string;
};

export const clean = (array, value) => {
    while(array.indexOf(value) > -1) {
        array.splice(array.indexOf(value), 1);
    }
    return array;
};

export const uc_first = string => {
    let words = [];
    string.split(' ').forEach(word => {
        words.push(word.trim().charAt(0).toUpperCase() + word.trim().slice(1).toLowerCase());
    });
    return words.join(' ');
};
