// Deasy Data Handle Utilities

function makeArray() {
    return [];
}

function getArrayLength(arr) {
    if (arr === null || arr === undefined) return 0;
    return arr.length;
}

function isArray(val) {
    return Array.isArray(val);
}

function isString(val) {
    return typeof val === 'string';
}

function isNode(val) {
    return val !== null && val !== undefined;
}

function isFile(val) {
    return val instanceof File;
}

function isFileObj(val) {
    if (val === null || typeof val !== 'object') return false;
    return val.hasOwnProperty('name') && val.hasOwnProperty('data');
}

function toFile(fileObj) {
    return new File([fileObj.data], fileObj.name, { type: fileObj.type || '' });
}
