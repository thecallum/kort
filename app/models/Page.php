<?php

    namespace Model;

    class Page extends \BaseRedisModel {
        public function getUrl($routeID) {
            return $this->redis->hgetall('route:'.$routeID);
        }
    }