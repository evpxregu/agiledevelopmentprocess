PANDOC ?= pandoc

all: textemplate pdftemplate wordtemplate requirements


# convert the markdown template to latex
textemplate: report_template.md
	$(PANDOC) -s -N -o out/report_template.tex $<

# convert the markdown template to pdf
pdftemplate: report_template.md
	$(PANDOC) -N -o out/report_template.pdf $<

# convert the markdown template to word
wordtemplate: report_template.md
	$(PANDOC) -o out/report_template.docx $<
clean:
	rm out/*
