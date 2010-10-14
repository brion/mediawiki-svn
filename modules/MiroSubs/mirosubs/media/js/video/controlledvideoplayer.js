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

/**
 * @fileoverview A video player with custom video controls, to be used 
 *     particularly for completing subtitling work.
 */

goog.provide('mirosubs.video.ControlledVideoPlayer');

/**
 *
 * @constructor
 * @param {mirosubs.video.AbstractVideoPlayer} videoPlayer
 */
mirosubs.video.ControlledVideoPlayer = function(videoPlayer) {
    goog.ui.Component.call(this);
    this.videoPlayer_ = videoPlayer;
};
goog.inherits(mirosubs.video.ControlledVideoPlayer, goog.ui.Component);

mirosubs.video.ControlledVideoPlayer.prototype.createDom = function() {
    mirosubs.video.ControlledVideoPlayer.superClass_.createDom.call(this);
    this.addChild(this.videoPlayer_, true);
    this.controls_ = new mirosubs.controls.VideoControls(this.videoPlayer_);
    this.addChild(this.controls_, true);
};
mirosubs.video.ControlledVideoPlayer.prototype.getPlayer = function() {
    return this.videoPlayer_;
};