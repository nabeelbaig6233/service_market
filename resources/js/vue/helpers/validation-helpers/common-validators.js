/**
 * Validators
 * ========================
 * Form Input Validations
 * ========================
 */

import { trimChar, clean, uc_first } from "../helpers";

/**
 * Main function that triggers other validation functions
 * Params:
 * -------
 * 1. input: Input to Validate
 * 2. display_name: Input name to use in errors
 * 3. rules: Validation Rules
 * 4. halt: If true, terminate on first error (default false)
 * ============================================================
 */
export const validate = (input, display_name, rules, halt = false) => {
    let result = [];
    const validations = trimChar(rules, '|').split('|');
    for (let rule = 0; rule < validations.length; rule++) {
        if (validations[rule].indexOf(':') === -1) {
            result.push(window[validations[rule].trim()](input, display_name));
        } else {
            const func_params = validations[rule].split(':');
            result.push(window[func_params[0].trim()](input, display_name, func_params[1].indexOf(',') === -1 ? func_params[1] : func_params[1].split(',')));
        }
        if (halt && result[result.length - 1] !== true) {
            return clean(result, true);
        }
    }
    return clean(result, true);
};

window.email = (input, display_name) => {
    const regex = new RegExp('^(([^<>()\\[\\]\\\\.,;:\\s@"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@"]+)*)|(".+"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$');
    return (typeof input === 'string' && regex.test(input.trim())) || `${uc_first(display_name)} is not valid`;
};

window.alphabetic = (input, display_name) => {
    const regex = new RegExp('^[a-zA-Z ]+$');
    return (typeof input === 'string' && regex.test(input.trim())) || `${uc_first(display_name)} must contain only alphabets`;
};

window.numeric = (input, display_name) => {
    const regex = new RegExp('^[0-9]+$');
    return (!isNaN(Number(input)) && regex.test(input)) || `${uc_first(display_name)} should be a valid number`;
};

window.string = (input, display_name) => (typeof input.trim() === 'string') || `${uc_first(display_name)} should be a valid string`;

window.required = (input, display_name) => (input !== '' && input !== null && input !== 0 && input !== false) || `${uc_first(display_name)} is required`;

window.accepted = (input, display_name) => (typeof input === 'boolean' && input) || `Please check ${uc_first(display_name)}`;

window.minVal = (input, display_name, min_val) => (Number(input) >= Number(min_val)) || `${uc_first(display_name)} should be minimum ${Number(min_val)}`;

window.valBtwn = (input, display_name, range) => ((Number(input) > Number(range[0])) && (Number(input) < Number(range[1]))) || `${uc_first(display_name)} should be in range ${Number(range[0])} - ${Number(range[1])}`;

window.maxVal = (input, display_name, max_val) => (Number(input) <= Number(max_val)) || `${uc_first(display_name)} should be maximum ${Number(max_val)}`;

window.minChar = (input, display_name, min_char) => (input.trim().length >= Number(min_char)) || `${uc_first(display_name)} should be at least ${Number(min_char)} characters long`;

window.charBtwn = (input, display_name, range) => ((input.trim().length > Number(range[0])) && (input.trim().length < Number(range[1]))) || `${uc_first(display_name)} should be ${Number(range[0])} to ${Number(range[1])} characters long`;

window.maxChar = (input, display_name, max_char) => (input.trim().length <= Number(max_char)) || `${uc_first(display_name)} should be at most ${Number(max_char)} characters long`;
