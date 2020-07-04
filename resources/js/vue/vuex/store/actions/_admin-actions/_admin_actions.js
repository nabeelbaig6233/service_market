/**
 * VueX - Admin Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * Administrator
 * ==============================================
 */

import { _CMS_actions } from './_CMS';
import { _user_form_data_actions } from './_user_forms_data';
import { _user_albums_actions } from './_user_albums';
import { _user_album_pictures_actions } from './_user_album_pictures';
import { _print_photos_for_sale_actions } from './_print_photos_for_sale';
import { _customer_management_actions } from './_customer_management';

export const adminActions = {
    ..._CMS_actions, ..._user_form_data_actions, ..._user_albums_actions,
    ..._user_album_pictures_actions, ..._print_photos_for_sale_actions,
    ..._customer_management_actions,
};
