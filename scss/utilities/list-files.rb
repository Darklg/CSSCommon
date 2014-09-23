# http://stackoverflow.com/a/10456412
module Sass::Script::Functions
    def listFiles(path)
        return Sass::Script::List.new(
            Dir.glob(path.value).map! { |x| Sass::Script::String.new(File.basename(x, ".*")) },
            :comma
        )
    end
end