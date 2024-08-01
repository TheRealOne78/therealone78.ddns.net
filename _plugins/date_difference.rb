require 'date'

module Jekyll
  module DateDifference
    # Calculate the difference in years between date1 and date2
    def date_diff_in_years(date1, date2)
      d1 = Date.parse(date1.to_s)
      d2 = Date.parse(date2.to_s)

      # Calculate the difference in days
      difference_in_days = (d2 - d1).to_i

      # Convert days to years
      difference_in_years = difference_in_days / 365.25

      difference_in_years.to_i
    end
  end
end

Liquid::Template.register_filter(Jekyll::DateDifference)
