// Universal Subtitles, universalsubtitles.org
// 
// Copyright (C) 2010 Participatory Culture Foundation
// 
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
// 
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
// 
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see 
// http://www.gnu.org/licenses/agpl-3.0.html.

goog.provide('mirosubs.video.DailymotionVideoSource');

/**
 * @constructor
 */
mirosubs.video.DailymotionVideoSource = function(videoID) {
    this.videoID_ = videoID;
    this.uuid_ = mirosubs.randomString();
};

mirosubs.video.DailymotionVideoSource.prototype.createPlayer = function() {
    return this.createPlayer_(false);
};

mirosubs.video.DailymotionVideoSource.prototype.createControlledPlayer = function() {
    return new mirosubs.video.ControlledVideoPlayer(this.createPlayer_(true));
};

mirosubs.video.DailymotionVideoSource.prototype.createPlayer_ = function(chromeless) {
    return new mirosubs.video.DailymotionVideoPlayer(
        new mirosubs.video.DailymotionVideoSource(this.videoID_), chromeless);
};

mirosubs.video.DailymotionVideoSource.prototype.getVideoId = function() {
    return this.videoID_;
};

mirosubs.video.DailymotionVideoSource.prototype.getUUID = function() {
    return this.uuid_;
};
