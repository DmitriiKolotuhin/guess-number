# Проект "Угадай число"

## Описание проекта

Проект включает разработку игры "Угадай число" (Guess Number) с использованием реляционной базы данных для сохранения результатов игр. Игра реализована на языке PHP с использованием базы данных SQLite. Пользователям предоставляется возможность просматривать историю игр и воспроизводить ранее сыгранные партии.

Цель игры - угадать загаданное компьютером число в заданном диапазоне. Игрок вводит число, и система сообщает, больше или меньше это число, чем загаданное. Игрок продолжает попытки угадывания, пока не угадает правильное число.

### Правила игры

- Игрок вводит диапазон чисел, в котором будет происходить угадывание.
- Компьютер загадывает случайное число в этом диапазоне.
- Игрок вводит свое число и получает подсказку, больше или меньше оно загаданного.
- Игрок продолжает угадывать, пока не назовет правильное число.
- Количество попыток фиксируется и сохраняется в базе данных.

### Требования

- Выбор диапазона чисел: Вводится пользователем перед началом игры.
- Сохранение данных: Вся информация об играх и попытках угадывания сохраняется в базе данных SQLite.
- Хранение данных:
  - Дата игры
  - Имя игрока
  - Диапазон чисел
  - Загаданное число
  - Исход игры
  - Запись попыток в формате: номер попытки | загаданное число | результат (больше/меньше/угадано)
- Режимы игры:
  - Новая игра
  - Просмотр списка сохраненных игр
  - Повтор сохраненной партии (воспроизведение попыток)
  
## Игровой процесс

### Начало игры

Перед началом партии пользователю будет предложено ввести следующие параметры:

1. **Максимальное число**: Укажите максимальное число из отрезка.
2. **Количество попыток**: Укажите количество попыток для угадываения.

### Игровые действия

- **Проигрыш**: Если не угадал число за отведенное количество попыток, игра заканчивается.
- **Выигрыш**: Игра завершается, когда игрок угадал число.

### Просмотр сохраненных игр

После завершения игры пользователю будет предложено:

- Просмотреть список сохраненных игр, в котором будут указаны дата игры, имя игрока и исход.
- Повторить ранее сыгранную партию, вводя номер соответствующей игры из списка.

---

## Окружение и требования для запуска

1. **PHP**:
   - Версия: 7.4 или выше.
   - Настройки в `php.ini`:
     - Включите SQLite (`extension=sqlite3`).
     - Убедитесь, что настройки отображения ошибок (`display_errors`) включены в режиме разработки.

2. **SQLite**:
   - Версия: 3.x.
   - Проверьте наличие прав записи в каталоге, где находятся файлы баз данных.

3. **Composer**:
   - Composer должен быть установлен глобально.
   - Используйте команду `composer` для управления зависимостями.
   - Для установки Composer следуйте [официальной документации](https://getcomposer.org/doc/00-intro.md).

---

## Окружение и требования для запуска

1. **PHP**:
   - Версия: 7.4 или выше.
   - Настройки в `php.ini`:
     - Включите SQLite (`extension=sqlite3`).
     - Убедитесь, что настройки отображения ошибок (`display_errors`) включены в режиме разработки.

2. **SQLite**:
   - Версия: 3.x.
   - Проверьте наличие прав записи в каталоге, где находятся файлы баз данных.

3. **Composer**:
   - Composer должен быть установлен глобально.
   - Используйте команду `composer` для управления зависимостями.
   - Для установки Composer следуйте [официальной документации](https://getcomposer.org/doc/00-intro.md).

---

## Установка и запуск проекта

1. **Склонируйте репозиторий**:
   ```bash
   git clone https://github.com/DmitriiKolotuhin/guess-number
   ```

2. **Перейдите в каталог проекта**:
   ```bash
   cd C:\Users\User\Desktop\Andpop\402_DBTech_Kolotuhin_DV\Task02\guess-number
   ```

3. **Установите зависимости через Composer**:
   ```bash
   composer install
   ```

4. **Запуск игры: Выполните команду для запуска игры**:
   ```bash
   php bin/guess-number.php
   ```

   - Или если ваш пакет опубликован на Packagist, установите его глобально:

   ```bash
   composer global require DmitriiKolotuhin/guess-number
   ```

   - И затем выполните команду:
   ```bash
   guess-number
   ```

## Примечания

- Проверьте права на запись в каталог с базой данных SQLite.

- Дополнительную информацию можно найти в документации PHP, SQLite и Composer:

- [SQLite Documentation](https://www.sqlite.org/docs.html)
- [PHP Documentation](https://www.php.net/docs.php)
- [Composer Documentation](https://getcomposer.org/doc/)

## Ссылки на пакеты
- [Packagist пакет GuessNumber](https://packagist.org/packages/haiven/guess-number)