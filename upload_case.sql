

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- 表的结构 `upload_case`
--

CREATE TABLE IF NOT EXISTS `upload_case` (
  `id` text NOT NULL,
  `creat_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` text NOT NULL,
  `name` text NOT NULL,
  `content` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `upload_case`
--
