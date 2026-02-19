require 'date'

module Jekyll
  module DateDifference
    def date_diff_in_years(date1, date2)
      d1 = Date.parse(date1.to_s)
      d2 = Date.parse(date2.to_s)

      years = d2.year - d1.year
      years -= 1 if d2.month < d1.month || (d2.month == d1.month && d2.day < d1.day)

      years
    end

    def date_diff_in_months(date1, date2)
      d1 = Date.parse(date1.to_s)
      d2 = Date.parse(date2.to_s)

      months = (d2.year * 12 + d2.month) - (d1.year * 12 + d1.month)
      months -= 1 if d2.day < d1.day

      months
    end

    # Remainder months after full years
    def date_diff_in_months_remainder(date1, date2)
      d1 = Date.parse(date1.to_s)
      d2 = Date.parse(date2.to_s)

      years = date_diff_in_years(d1, d2)
      total_months = date_diff_in_months(d1, d2)

      remainder = total_months - (years * 12)
      remainder
    end
  end
end

Liquid::Template.register_filter(Jekyll::DateDifference)
