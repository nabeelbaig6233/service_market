/**
 * VueX - Application Mutation Actions
 * ==============================================
 * Here we'll register our mutation actions for
 * Application
 * ==============================================
 */

import { _your_photo_actions } from "./_your_photo";
import { _album_cover_actions } from "./_album_cover";
import { _contact_from_actions } from './_contact_form';
import { _prints_photos_actions } from "./_prints_photos";

export const appActions = { ..._contact_from_actions, ..._your_photo_actions, ..._album_cover_actions, ..._prints_photos_actions };
